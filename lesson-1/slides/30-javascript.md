# JavaScript in Drupal

--vv--

# JavaScript in Drupal
- Modules attach JavaScript when it is required.
- JavaScript can be added to the Theme.
- Add custom JavaScript (and CSS) using Libraries.
- Core contains jQuery, Modernizr, Backbone, etc.
- Use jQuery compatibility code:


```js
(function ($, Drupal, drupalSettings) {

  'use strict’;

  // ...

})(jQuery, Drupal, drupalSettings);
```

--vv--

# Drupal.behaviours
- Behaviour: is executed when the DOM is loaded and after AJAX is executed. 
- Documentation: https://www.drupal.org/node/2269515


```js
$(document).ready(function () {
  // Do some fancy stuff.
});
```

```js
Drupal.behaviors.myBehavior = {
  attach: function (context, settings) {
    // Do some fancy stuff ... and on AJAX too.
  }
};
```

--vv--

# Drupal.behaviours

```js
Drupal.behaviors.myBehavior = {
  attach: function (context, settings) {

    $(context).find('input.myCustom').once('myBehavior').each(function () {
      // Do some fancy stuff only once.
    });
  }
};
```

With AJAX 'context' is only the modified part of the DOM.