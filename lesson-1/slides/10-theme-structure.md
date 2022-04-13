# Structure of a theme

--vv--

# Theme overview
- Twig templates for (almost) all output.
- Nested template structure.
- Template can be overridden conditionally
- Free choice of CSS and JS (frameworks)
- CSS & JS handled as libraries
- Libraries have dependencies
- Modules provide output in the form of a Render Array.
- Preprocess before template

--vv--

# Theme files

![Theme files](lesson-1/slides/images/theme-files.png)<!-- .element: style="width: 40%;" -->

--vv--

# seven.info.yml

```yaml
name: Seven
type: theme
base theme: classy
description: 'The default administration theme for Drupal …'
package: Core
version: VERSION
core: 8.x
libraries:
 - seven/global-styling
libraries-override:
  core/drupal.vertical-tabs:
    css:
      component:
        misc/vertical-tabs.css: false
  classy/dialog:
    seven/seven.drupal.dialog
regions:
  content: 'Content'
  help: 'Help'
  page_top: 'Page top'
  page_bottom: 'Page bottom'
  sidebar_first: 'First sidebar'
```

--vv--

# In THEME.info.yml
- Required: name, type, base theme, core
- libraries: Libraries that will always be loaded. Libraries are defined in THEME.libraries.yml.
- regions: Theme regions. When omitted, the default is used.
- Theme specific parameters can be added freely.
- Documentation: https://www.drupal.org/node/2349827

--vv--

# Exercise
Create the base for a custom theme.

- Create a custom theme and generate content.
- See 'exercises/01 base/exercises.txt' for details.

