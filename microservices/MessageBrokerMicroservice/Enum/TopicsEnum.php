<?php

namespace Kubersoftware\Microservices\MessageBrokerMicroservice\Enum;


use SplEnum;

class TopicsEnum extends SplEnum
{

    public const __default = 'qDefault';


    /**
     * Очередь для отправки результатов
     */
    public const RESULTS_TOPIC = "qResult";

    /**
     * Очередь для отправки ошибок
     */
    public const ERRORS_TOPIC = "qError";

    /**
     * Очередь для получения задач для микросервиса EntityManager
     */
    public const ENTITY_MANAGER_TOPIC = "qEntityManager";

    /**
     * OLD Очередь отправки задач для микросервиса EntityManager
     * @\Kubersoftware\Dto\EntityManagerService\InsertDto
     */
    public const ENTITY_MANAGER_INSERT_TOPIC = "qEntityManager_InsertDto";

    /**
     *
     */
    public const TASKMANAGER_TOPIC = "qTaskManager";

    /**
     * OLD
     */
    public const CALULATOR_TOPIC = "qCalculator";

    /**
     * Очередь для отправки сообщений в микросервис ApiDoc
     */
    public const APIDOC_TOPIC = 'qApiDoc';

}