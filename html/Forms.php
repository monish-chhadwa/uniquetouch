<?php

/**
 * Created by PhpStorm.
 * User: monish.c
 * Date: 13/07/19
 * Time: 9:52 PM
 */
class Forms
{
    public static $formElements = array(
        'name' => <<<EOL
<div class="form-group">
    <input type="text" class="form-control" placeholder="Your Name*" name="name">
    <label class="error" for="name" id="name_error">Name is required.</label>
</div>
EOL
    , 'email' => <<<EMAIL
<div class="form-group">
    <input type="text" class="form-control" placeholder="Your Email*" name="email">
    <label class="error" for="email" id="email_error">Email is required.</label>
</div>
EMAIL
    , 'subject' => <<<SUBJECT
<div class="form-group" >
    <input type = "text" class="form-control" placeholder = "Subject*" name = "subject" >
    <label class="error" for="name" id = "subject_error" > Subject is required .</label >
</div>
SUBJECT
    , 'message' => <<<MESSAGE
<div class="form-group" >
    <textarea name = "message" id = "" cols = "30" rows = "7" class="form-control"
              placeholder = "Message*" ></textarea >
    <label class="error" for="name" id = "message_error" > Message is required .</label >
</div>
MESSAGE
    , 'mobile' => <<<MOBILE
<div class="form-group" >
    <input type = "tel" class="form-control" placeholder = "Mobile*" name = "mobile" >
    <label class="error" for="name" id = "mobile_error" > Mobile is required .</label >
</div>
MOBILE
    , 'quantity' => <<<SELECTION
<div class="form-group" >
    <label for="exampleFormControlSelect1">Select quantity</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
</div>
SELECTION
    , 'readonly' => <<<READONLY
    <div class="form-group" >
<input class="form-control" type="text" id="readonly" placeholder="Readonly input here…" readonly>
</div>
READONLY
    );

    /**
     * @param $formElements {Array} - Form elements required in the order specified
     * @param bool $cssJsRequired
     * @return array
     */
    public static function getForm($formElements, $cssJsRequired = true)
    {
        $returnValue = array();
        $returnValue['css'] = <<<EOL
<style>
/*        User defined styles*/
    .error {
        color: red;
    }
</style>
EOL;
        $returnValue['js'] = <<<EOL
<script src="js/user-defined/form-validator.js"></script>
EOL;
        $formHtml = '<form action="#">';
        foreach ($formElements as $element) {
            $formHtml .= self::$formElements[$element];
        }
        $formHtml .= <<<EOL
    <div class="form-group">
        <input type="submit" id="contactSubmit" value="Send Message" class="btn btn-primary py-3 px-5">
    </div>
</form>
EOL;
        $returnValue['form'] = $formHtml;
        return $returnValue;
    }
}