<?php

namespace Container2rJ7sAo;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderedf56 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2721b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7335b = [
        
    ];

    public function getConnection()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getConnection', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getMetadataFactory', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getExpressionBuilder', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'beginTransaction', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getCache', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'transactional', array('func' => $func), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->transactional($func);
    }

    public function commit()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'commit', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->commit();
    }

    public function rollback()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'rollback', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getClassMetadata', array('className' => $className), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'createQuery', array('dql' => $dql), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'createNamedQuery', array('name' => $name), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'createQueryBuilder', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'flush', array('entity' => $entity), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'clear', array('entityName' => $entityName), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->clear($entityName);
    }

    public function close()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'close', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->close();
    }

    public function persist($entity)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'persist', array('entity' => $entity), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'remove', array('entity' => $entity), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'refresh', array('entity' => $entity), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'detach', array('entity' => $entity), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'merge', array('entity' => $entity), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'contains', array('entity' => $entity), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getEventManager', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getConfiguration', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'isOpen', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getUnitOfWork', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getProxyFactory', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'initializeObject', array('obj' => $obj), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'getFilters', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'isFiltersStateClean', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'hasFilters', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return $this->valueHolderedf56->hasFilters();
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

        $instance->initializer2721b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderedf56) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderedf56 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderedf56->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, '__get', ['name' => $name], $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        if (isset(self::$publicProperties7335b[$name])) {
            return $this->valueHolderedf56->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedf56;

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

        $targetObject = $this->valueHolderedf56;
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
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedf56;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderedf56;
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
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, '__isset', array('name' => $name), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedf56;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderedf56;
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
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, '__unset', array('name' => $name), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedf56;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderedf56;
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
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, '__clone', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        $this->valueHolderedf56 = clone $this->valueHolderedf56;
    }

    public function __sleep()
    {
        $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, '__sleep', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;

        return array('valueHolderedf56');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2721b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2721b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2721b && ($this->initializer2721b->__invoke($valueHolderedf56, $this, 'initializeProxy', array(), $this->initializer2721b) || 1) && $this->valueHolderedf56 = $valueHolderedf56;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderedf56;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderedf56;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
