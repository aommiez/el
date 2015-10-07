<?php
/**
 * Created by PhpStorm.
 * User: p2
 * Date: 7/15/14
 * Time: 11:27 AM
 */

namespace Main\CTL;


use Main\Context\Context;
use Main\Http\RequestInfo;
use Main\View\HtmlView;
use Main\View\JsonView;
use Main\ThirdParty\Xcrud\Xcrud;

/**
 * @Restful
 * @uri /
 */
class HomeCTL extends BaseCTL {

    /**
     * @GET
     */
    public function index () {
        $arr = array('view'=> 'index');
        return new HtmlView('/index');
    }

    /**
     * @GET
     * @uri itwork
     */
    public function itwork () {
        $arr = array('view'=> 'index');
        return new HtmlView('/itwork');
    }

    /**
     * @GET
     * @uri services
     */
    public function services () {
        $arr = array('view'=> 'index');
        return new HtmlView('/services');
    }

    /**
     * @GET
     * @uri categorties
     */
    public function categorties () {
        $arr = array('view'=> 'index');
        return new HtmlView('/categorties');
    }

    /**
     * @GET
     * @uri aboutus
     */
    public function aboutus () {
        $arr = array('view'=> 'v');
        return new HtmlView('/aboutus');
    }

    /**
     * @GET
     * @uri signin
     */
    public function abousignintus () {
        $arr = array('view'=> 'v');
        return new HtmlView('/signin');
    }
    /**
     * @GET
     * @uri register
     */
    public function register () {
        $arr = array('view'=> 'v');
        return new HtmlView('/register');
    }

}
