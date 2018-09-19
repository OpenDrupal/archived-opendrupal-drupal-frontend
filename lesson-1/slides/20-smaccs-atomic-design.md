# SMACCS &  Atomic Design

--vv--

# SMACCS
- Base: Reset & HTML element styling
- Layout: General positioning and layout (page, region).
- Component (orig: module): 
  - Stand alone layout and positioning of parts. Example: field, form, block, menu, view, etc.
  - This is were most of your CSS rules live.
- State: Styling for non-default states. Due to JavaScript, Pseudo-class, Media Query, etc.
- Theme: Optional override on State.

--vv--

# SMACCS and Drupal
- SMACCS example: Seven theme
- CSS file structuur and file names.
- Use Drupal component and module names in file names.
- CSS aggregation order is determined in the library (base, component, etc.).
- Drupal core CSS classes are semantically.
- 'component' instead of 'module'

--vv--

# Atomic design
![Atomic design](lesson-1/slides/images/atomic-design.png)<!-- .element: style="width: 30%;" -->

- Atoms
- Molecules
- Organisms
- Templates
- Pages

--vv--

# Atomic Drupal
- Atoms: Form label, input element, button.
- Molecules: Form element with label, image with caption.
- Organisms: Contact form, menu bar, banner.
- Templates: Node template, Views template.
- Pages: Front page, landing page, page per content type.

--vv--

# Atomic + SMACCS + Drupal
- Break down CSS files to make them re-usable.
  - Per field type, button, block, view, module, content type, part of the site, etc.
- Sub-libraries for re-use. Sub-libraries for less frequently used parts (loaded conditionally or by the template).
- Module CSS often broken down by their use. More granular, makes override easier: node.admin.css, node.module.css, node.preview.css.
