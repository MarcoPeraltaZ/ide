<?php

namespace Drupal\Tests\simple_recaptcha\FunctionalJavascript;

/**
 * JavaScripts tests for the Simple reCAPTCHA module.
 *
 * @group simple_recaptcha
 */
class SimpleRecaptchaJavascriptTest extends SimpleRecaptchaJavascriptTestBase {
  /**
   * Check if reCAPTCHA validation is added to user login form.
   */
  public function testLoginForm() {
    $this->configureModule();
    $config = $this->config('simple_recaptcha.config');
    $this->drupalGet('/user/login');

    // reCAPTCHA site key exists in drupalSettings.
    $this->assertJsCondition('drupalSettings.simple_recaptcha.sitekey === "' . $config->get('site_key') . '";');

    // Check if hidden field added by the module are present.
    $this->webAssert->hiddenFieldExists('simple_recaptcha_token');

    // This field shoudln't exist as it's added only when we configure v3 reCAPTCHA.
    $this->webAssert->hiddenFieldNotExists('simple_recaptcha_message');

    // Try to click on Log in button and render reCAPTCHA widget.
    $this->page->pressButton('Log in');
    $this->webAssert->waitForElement('css', 'recaptcha-visible');

    // reCAPTCHA doesn't provide consistent iframe name so we need to update it.
    $this->assignNameToCaptchaIframe();
    $this->getSession()->switchToIFrame('recaptcha-iframe');
    $this->assertStringCOntainsString('This reCAPTCHA is for testing purposes only. Please report to the site admin if you are seeing this.', $this->page->getContent());
    $this->htmlOutput($this->page->getHtml());

    // Try to log in, which should fail.
    $this->getSession()->switchToIFrame();
    $user = $this->drupalCreateUser([]);
    $edit = ['name' => $user->getAccountName(), 'pass' => $user->passRaw];
    $this->drupalPostForm(NULL, $edit, t('Log in'));

    // Check if reCAPTCHA wrapper has error class.
    $error_wrapper = $this->page->find('css', '.recaptcha-error');
    $this->assertTrue($error_wrapper->isVisible());

    // And we're still at user login page.
    $this->webAssert->addressEquals('/user/login');
    $this->htmlOutput($this->page->getHtml());

  }

  /**
   * Assigns a name to the reCAPTCHA iframe.
   * @see \Drupal\Tests\media\FunctionalJavascript\CKEditorIntegrationTest::assignNameToCkeditorIframe
   * assignNameToCkeditorIframe
   */
  protected function assignNameToCaptchaIframe() {
    $javascript = <<<JS
(function(){
  var iframes = document.getElementsByTagName('iframe');
    for(var i = 0; i < iframes.length; i++){
        var f = iframes[i];
        f.name = 'recaptcha-iframe';
    }
})()
JS;
    $this->getSession()->evaluateScript($javascript);
  }

}
