<?php

namespace ContainerNJRhfuE;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder667a5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf564f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7e0b7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getConnection', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getMetadataFactory', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getExpressionBuilder', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'beginTransaction', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getCache', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'transactional', array('func' => $func), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->transactional($func);
    }

    public function commit()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'commit', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->commit();
    }

    public function rollback()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'rollback', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getClassMetadata', array('className' => $className), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'createQuery', array('dql' => $dql), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'createNamedQuery', array('name' => $name), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'createQueryBuilder', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'flush', array('entity' => $entity), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'clear', array('entityName' => $entityName), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->clear($entityName);
    }

    public function close()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'close', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->close();
    }

    public function persist($entity)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'persist', array('entity' => $entity), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'remove', array('entity' => $entity), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'refresh', array('entity' => $entity), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'detach', array('entity' => $entity), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'merge', array('entity' => $entity), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'contains', array('entity' => $entity), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getEventManager', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getConfiguration', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'isOpen', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getUnitOfWork', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getProxyFactory', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'initializeObject', array('obj' => $obj), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'getFilters', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'isFiltersStateClean', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'hasFilters', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return $this->valueHolder667a5->hasFilters();
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

        $instance->initializerf564f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder667a5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder667a5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder667a5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, '__get', ['name' => $name], $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        if (isset(self::$publicProperties7e0b7[$name])) {
            return $this->valueHolder667a5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder667a5;

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

        $targetObject = $this->valueHolder667a5;
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
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder667a5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder667a5;
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
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, '__isset', array('name' => $name), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder667a5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder667a5;
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
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, '__unset', array('name' => $name), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder667a5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder667a5;
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
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, '__clone', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        $this->valueHolder667a5 = clone $this->valueHolder667a5;
    }

    public function __sleep()
    {
        $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, '__sleep', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;

        return array('valueHolder667a5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf564f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf564f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf564f && ($this->initializerf564f->__invoke($valueHolder667a5, $this, 'initializeProxy', array(), $this->initializerf564f) || 1) && $this->valueHolder667a5 = $valueHolder667a5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder667a5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder667a5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
