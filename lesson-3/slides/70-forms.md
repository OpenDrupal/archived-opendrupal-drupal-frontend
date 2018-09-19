# Forms

--vv--

# Forms
- Modify forms with hook_form_FORM_ID_alter() and hook_form_alter().
- $form_state is now an object:

```php
use Drupal\Core\Form\FormStateInterface;

function hook_form_alter(&$form, FormStateInterface $form_state, $form_id) {
  // ...  
}
```

--vv--

# Exercise
Modify the layout of the contact form.

- Customize the Contact form and Contact Block styling.
- See 'exercises/08 form/exercises.php' for details.
