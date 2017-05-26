<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Text;
use Cake\ORM\TableRegistry;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Controller\Component\AuthComponent;

/**
 * Upload component
 */
class UploadComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    
    public $max_files = 5;

    public function send($data)
    {
        $tipo = $this->permitir($data['file']);
        if($tipo <> null)
        {
            $dir = $this->definir_dir($tipo);
            return $dir;
        }
        else
        {
            throw new InternalErrorException("Tipo de arquivo não permitido.", 1);
        }
    }
    
    public function definir_dir($tipo)
    {
        $dir = new Folder(WWW_ROOT);
        switch ($tipo)
        {
            case 'doc':
            case 'docx':
            case 'pdf':
                if(file_exists($dir->path . DS . 'documentos'))
                {
                   $diretorio = $dir->addPathElement($dir->path, 'documentos');
                }
                else
                {
                    $dir->create('documentos');
                    $diretorio = $dir->addPathElement($dir->path, 'documentos');
                }
                break;
            default:
                $diretorio = $dir->addPathElement($dir->path, 'img');
                if(file_exists($diretorio . DS . 'acervo'))
                {
                    $diretorio = $dir->addPathElement($diretorio, 'acervo');
                }
                else 
                {
                    $dir->create($diretorio . DS . 'acervo');
                    $diretorio = $dir->addPathElement($diretorio, 'acervo');
                }
                break;
        }
        return $diretorio;
    }
    
    /*
     * Método permitir
     */
    public function permitir($file)
    {
        // extensões de arquivos permitidos para upload
        $tipos = array('doc', 'docx', 'gif', 'jpg', 'jpeg', 'pdf', 'png');
        $extensao = pathinfo($file['name']);
        $ext = strtolower($extensao['extension']);
        if(in_array($ext, $tipos))
        {
            return $ext;
        }
    }
    
    public function salvar($arq, $dir)
    {
//        debug($arq);
//        debug($dir);
//        die();
        if(is_uploaded_file($arq['file']['tmp_name']))
        {
            $filename = Text::uuid() . '-' . $arq['file']['name'];
            if(move_uploaded_file($arq['file']['tmp_name'], $dir.DS.$filename))
            {
                $tbArquivos = TableRegistry::get('arquivos');
                $arquivo = $tbArquivos->newEntity();
                $arquivo->name = $filename;
                $arquivo->size = $arq['file']['size'];
                $arquivo->dir = $diretorio;
//                debug($arquivo);
//                die();
                if($this->tbArquivos->save($arquivo))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }        
        }
    }


    /**
     * Método Excluir
     * 
     * @param type $file
     */
    public function excluir($file)
    {
        $dir = new Folder(WWW_ROOT . 'img' . DS . 'uploads');
        $arq = new File($dir->pwd() . DS . $file);
        $arq->delete();
    }
    
    /**
     * Método Miniatura
     * 
     * @param type file
     * 
     * 
     */
    public function miniatura($arquivo, $larguraMax, $alturaMax, $qualidade)
    {
        $dir = new Folder(WWW_ROOT . 'img' . DS . 'acervo');
        $arq = new File($dir->pwd() . DS . $arquivo);
        //defini o nome do thumbnail
        $thumbnail = $arq->name;
//        debug($thumbnail);  
        /**
         * getimagesize()
         * return array()
         * índice 0 = largura
         * índice 1 = altura 
         * índice 2 = tipo (1 = GIF, 2 = JPG, 3 = PNG, 4 = SWF, 5 = PSD, 
         * 6 = BMP, 7 = TIFF(intel byte order), 8 = TIFF(motorola byte order), 
         * 9 = JPC, 10 = JP2, 11 = JPX, 12 = JB2, 13 = SWC, 14 = IFF, 15 = WBMP, 
         * 16 = XBM
         * índice 3 atributos html de largura e altura
         * 
         * somente para imagens jpeg: 
         * índice 4 bits da imagem
         * índice 5 channels (3 -> RGB, 4 -> CMYK)
         * 
         * índice 6 mimetype para enviar imagens com cabeçalho 
         * HTTP Content-type correto
         */
        list($largura, $altura, $tipo, $attr) = getimagesize($arq->path);
        switch($tipo) 
        {
            case 1:
                $imgOrigem = imagecreatefromgif($arq->path);
                break;
            case 2:
                $imgOrigem = imagecreatefromjpeg($arq->path);
                break;
            case 3:
                $imgOrigem = imagecreatefrompng($arq->path);
                break;
        }
        $escala = min($larguraMax/$largura, $alturaMax/$altura);
        
        if($escala < 1)
        {
            $novaLargura = floor($escala * $largura);
            $novaAltura = floor($escala * $altura);
            
            //cria uma imagem temporária
            $imgFinal = imagecreatetruecolor($novaLargura, $novaAltura);
            
            //copia a redimensiona a imagem velha na nova
            imagecopyresampled($imgFinal, $imgOrigem, 0, 0, 0, 0, $novaLargura, 
                    $novaAltura, $largura, $altura);
            
            $novoDir = new Folder(WWW_ROOT . 'img');
            if(!$novoDir->path . DS . 'thumbs')
            {
                $novoDir->create('thumbs');
                $thumbs = $novoDir->addPathElement($novoDir->path, 'thumbs');
            }
            $teste = $thumbs . DS. $thumbnail;
            imagejpeg($imgFinal, $teste);

            imagedestroy($imgOrigem);
            imagedestroy($imgFinal);
        }
    }
}
