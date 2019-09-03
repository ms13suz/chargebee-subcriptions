<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ChargeBee_HostedPage;
use ChargeBee_PortalSession;
use Illuminate\Support\Facades\Input;
use Validator;

class ChargebeeController extends Controller
{
    public function generateCheckoutNewUrl(Request $request)
    {
        $result = ChargeBee_HostedPage::checkoutNew(array(
            "subscription" => array(
                "planId" => $request->get('plan_id')
            ),
            "customer" => array(
                "first_name" => $request->get('first_name'),
                "last_name" => $request->get('last_name'),
                "company" => $request->get('company'),
                "phone" => $request->get('phone'),
                "email" => $request->get('email')
            )
        ));
        $hostedPage = $result->hostedPage();
        // echo "<pre>";
        // print_($hostedPage);
        // die();
        return response()->json($hostedPage->getValues(), 200);
    }
    public function generateCheckoutExistingUrl(Request $request)
    {
        $result = ChargeBee_HostedPage::checkoutExisting(array(
            "subscription" => array(
                "id" => "1mhuIhIQhDeD9KFIJ"
            )
        ));
        $hostedPage = $result->hostedPage();
        return response()->json($hostedPage->getValues(), 200);
    }
    public function generateUpdatePaymentMethodUrl(Request $request)
    {
        $result = ChargeBee_HostedPage::managePaymentSources(array(
            "customer" => array(
                "id" => "cbdemo_sir"
            )
        ));
        $hostedPage = $result->hostedPage();
        return response()->json($hostedPage->getValues(), 200);
    }
    public function generatePortalSession(Request $request)
    {
        $result = ChargeBee_PortalSession::create(array(
            "customer" => array(
                "id" => "cbdemo_sir"
            )
        ));
        $portalSession = $result->portalSession();
        return response()->json($portalSession->getValues(), 200);
    }
}
