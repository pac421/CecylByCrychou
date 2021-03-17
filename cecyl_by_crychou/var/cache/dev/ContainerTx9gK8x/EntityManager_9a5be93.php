<?php

namespace ContainerTx9gK8x;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder66d1d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5d386 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties448b8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getConnection', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getMetadataFactory', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getExpressionBuilder', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'beginTransaction', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getCache', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'transactional', array('func' => $func), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->transactional($func);
    }

    public function commit()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'commit', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->commit();
    }

    public function rollback()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'rollback', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getClassMetadata', array('className' => $className), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'createQuery', array('dql' => $dql), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'createNamedQuery', array('name' => $name), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'createQueryBuilder', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'flush', array('entity' => $entity), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'clear', array('entityName' => $entityName), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->clear($entityName);
    }

    public function close()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'close', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->close();
    }

    public function persist($entity)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'persist', array('entity' => $entity), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'remove', array('entity' => $entity), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'refresh', array('entity' => $entity), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'detach', array('entity' => $entity), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'merge', array('entity' => $entity), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'contains', array('entity' => $entity), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getEventManager', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getConfiguration', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'isOpen', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getUnitOfWork', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getProxyFactory', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'initializeObject', array('obj' => $obj), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'getFilters', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'isFiltersStateClean', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'hasFilters', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return $this->valueHolder66d1d->hasFilters();
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

        $instance->initializer5d386 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder66d1d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder66d1d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder66d1d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, '__get', ['name' => $name], $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        if (isset(self::$publicProperties448b8[$name])) {
            return $this->valueHolder66d1d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66d1d;

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

        $targetObject = $this->valueHolder66d1d;
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
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66d1d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder66d1d;
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
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, '__isset', array('name' => $name), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66d1d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder66d1d;
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
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, '__unset', array('name' => $name), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66d1d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder66d1d;
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
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, '__clone', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        $this->valueHolder66d1d = clone $this->valueHolder66d1d;
    }

    public function __sleep()
    {
        $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, '__sleep', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;

        return array('valueHolder66d1d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5d386 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5d386;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5d386 && ($this->initializer5d386->__invoke($valueHolder66d1d, $this, 'initializeProxy', array(), $this->initializer5d386) || 1) && $this->valueHolder66d1d = $valueHolder66d1d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder66d1d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder66d1d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
