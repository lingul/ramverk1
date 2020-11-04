<?php

namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleController.
 */
class IpControllerTest extends TestCase
{

    public function setUp()
    {
        global $di;

        $this->di = new DIFactoryConfig();
        $this->di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        $di = $this->di;

        $this->controller = new IpController();
        $this->controller->setDI($this->di);
        $this->controller->initialize();

    }

    /**
     * Test the route "index".
     */
    public function testIndexAction()
    {
        $controller = new SampleController();
        $controller->initialize();
        $res = $controller->indexAction();
        $this->assertContains("db is active", $res);
    }

    /**
     * Test "createActionGet"
     */
    public function testcreateActionGet()
    {
        $controller = new SampleController();
        $controller->initialize();
        $res = $controller->createActionGet();
        $this->assertContains("db is active", $res);
    }

    /**
     * Test "createActionPost".
     */
    public function testcreateActionPost()
    {
        $controller = new SampleController();
        $controller->initialize();
        $res = $controller->createActionPost();
        $this->assertContains("db is active", $res);
    }

    /**
     * Test the "argumentActionGet".
     */
    public function testargumentActionGet()
    {
        $controller = new SampleController();
        $controller->initialize();
        $res = $controller->argumentActionGet("test");
        $this->assertContains("db is active, got argument 'test'", $res);
    }

    /**
     * Test the "typedArgumentActionGet".
     */
    public function testtypedArgumentActionGet()
    {
        $controller = new SampleController();
        $controller->initialize();
        $res = $controller->typedArgumentActionGet('test2', '5');
        $this->assertContains("db is active, got string argument 'test2' and int argument '5'", $res);
    }

    /**
     * Test the "defaultArgumentActionGet".
     */
    public function testdefaultArgumentActionGet()
    {
        $controller = new SampleController();
        $controller->initialize();
        $res = $controller->defaultArgumentActionGet('default');
        $this->assertContains("db is active, got argument 'default'", $res);
    }

    /**
     * Test the "indexActionPostTrue".
     */
    public function testindexActionPostTrue()
    {
        $_POST["ip"] = "8.8.8.8";
        $res = $this->controller->indexActionPost();
        $body = $res->getBody();
        $this->assertContains("google", $body);
    }

}
