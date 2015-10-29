<?php
if($modx->context->get('key') != "mgr"){
    /* grab the current langauge from the cultureKey request var */
    switch ($_REQUEST['cultureKey']) {
        case 'trad':
            /* switch the context */
            $modx->switchContext('trad');
            break;
       case 'eng':
            /* switch the context */
            $modx->switchContext('web');
            break;
       case 'simp':
            /* switch the context */
            $modx->switchContext('simp');
            break;
        
        default:
            /* Set the default context here */
            $modx->switchContext('web');
            $url = $modx->makeUrl(1);
            //$modx->sendRedirect($url);
            break;
    }
    /* unset GET var to avoid
     * appending cultureKey=xy to URLs by other components */
    $modx->setPlaceholder('ck',$_REQUEST['cultureKey']);
    unset($_GET['cultureKey']);
}