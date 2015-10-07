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
   
/**
* @Restful
* @uri /contact
*/

class ContactCTL extends BaseCTL{
    /**
     * @var Context $ctx;
     */
    public $reqInfo, $ctx;
    public function __construct(RequestInfo $reqInfo){
        $this->reqInfo = $reqInfo;
        $this->ctx = new Context();

    }

    public function getCtx(){
        return $this->ctx;
    }

	/**
	* @GET
	*/
	
	public function text()
	{
		return new HtmlView("/contact");
	}
}