<?php

namespace Container2toRxO7;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2e331 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb1a76 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9012c = [
        
    ];

    public function getConnection()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getConnection', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getMetadataFactory', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getExpressionBuilder', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'beginTransaction', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getCache', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'transactional', array('func' => $func), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->transactional($func);
    }

    public function commit()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'commit', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->commit();
    }

    public function rollback()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'rollback', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getClassMetadata', array('className' => $className), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'createQuery', array('dql' => $dql), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'createNamedQuery', array('name' => $name), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'createQueryBuilder', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'flush', array('entity' => $entity), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'clear', array('entityName' => $entityName), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->clear($entityName);
    }

    public function close()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'close', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->close();
    }

    public function persist($entity)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'persist', array('entity' => $entity), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'remove', array('entity' => $entity), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'refresh', array('entity' => $entity), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'detach', array('entity' => $entity), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'merge', array('entity' => $entity), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'contains', array('entity' => $entity), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getEventManager', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getConfiguration', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'isOpen', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getUnitOfWork', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getProxyFactory', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'initializeObject', array('obj' => $obj), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'getFilters', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'isFiltersStateClean', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'hasFilters', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return $this->valueHolder2e331->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb1a76 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2e331) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2e331 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2e331->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, '__get', ['name' => $name], $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        if (isset(self::$publicProperties9012c[$name])) {
            return $this->valueHolder2e331->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e331;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2e331;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e331;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2e331;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, '__isset', array('name' => $name), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e331;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2e331;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, '__unset', array('name' => $name), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e331;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2e331;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, '__clone', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        $this->valueHolder2e331 = clone $this->valueHolder2e331;
    }

    public function __sleep()
    {
        $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, '__sleep', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;

        return array('valueHolder2e331');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb1a76 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb1a76;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb1a76 && ($this->initializerb1a76->__invoke($valueHolder2e331, $this, 'initializeProxy', array(), $this->initializerb1a76) || 1) && $this->valueHolder2e331 = $valueHolder2e331;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2e331;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2e331;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
