# Theming strategies

--vv--

# Theming strategies
- View mode + (View +) template per view mode.
  - Custom field formatters are cheap (for developers).
  - Printing individual fields in a template is easy.
  - Make custom markup in a template.
- Variable in preprocess + logic in template
  - PHP is for logic: Create a variable in preprocess.
  - Templates are for classes and markup: Use the variable to set a class, for conditional markup, etc.

--vv--

# Exercise
Customise the layout of Portfolio content.

- Create a custom template for Portfolio node.
- Move markup from the Portfolio View into a template.
- See 'exercises/07 node/exercises.php' for details.
