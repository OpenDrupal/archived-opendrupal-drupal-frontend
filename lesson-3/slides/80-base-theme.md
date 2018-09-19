# Base theme

--vv--

# Base theme
- A theme can inherit styles, templates, preprocess, libraries from a Base theme.
- Stable base theme: Minimal markup, no CSS classes added to default core/module output.
- Classy base theme: Adds classes to markup. Use this for Drupal 7 style output.


--vv--

# Base theme

```yaml
name: Classy
type: theme
description: 'A base theme with sensible default CSS classes added. ...'
package: Core
```

```yaml
name: Bartik
type: theme
base theme: classy
description: 'A flexible, recolorable theme with many regions and ...'
package: Core
```

```yaml
name: Example
type: theme
base theme: none
description: 'The 'I can do better than core' example theme.'
package: Perfect
```

'base theme: none' is discouraged. Core markup may change in time.
