<?php
/**
 * @author Pavel Gajdos (info@pavelgajdos.cz)
 * @date 20.03.15
 */

namespace Joseki\LeanMapper;


use LeanMapper\DefaultEntityFactory;
use LeanMapper\Reflection\Property;
use PG\Files\FileManager;
use PG\Files\File;

class EntityFactory extends DefaultEntityFactory
{
    private $fileManager;
    
    public function __construct(FileManager $fileManager)
    {
        $this->fileManager = $fileManager;
    }

    /*
	 * @inheritdoc
	 */
    public function createEntity($entityClass, $arg = null)
    {
        $entity = new $entityClass($arg);
        $properties = $entityClass::getReflection()->getEntityProperties();
        foreach ($properties as $prop) {
            /** @var $prop Property */
            if ($prop->getType() == File::class) {
                
            }
        }
    }
} 