# Entities

--vv--

# Entities
- Content Entities
  - Comment, Node, User, (Taxonomy) Term
  - CustomBlock, Feed, File, (Aggregator) Item, Shortcut
- Configuration Entities
  - Block (type), NodeType, Breakpoint, ImageStyle, Language, Role, Tour, View, Vocabulary

--vv--

# Using entities

```php
$field_value = $node->field_name->value;
```

![Typed data UML diagram](lesson-3/slides/images/typed-data-uml.png)<!-- .element: style="width: 100%;" -->

- FieldItemListInterface: List of van field items
- FieldItemInterface: Field item with value(s).
- TypedDataInterface: TypedData class contains the property values.

```php
$body_properties = $node->body->getValue();
$entity_id = $entity->id();
$bundle = $entity->bundle();
$title = $entity->label();
$uid = $node->getOwnerId();
$author = $node->getOwner();
```

--vv--

# D8 data model
![Entity data model](lesson-3/slides/images/entity-data-model.png)<!-- .element: style="width: 50%;" -->

```php
$foo = $node->field_foo->value;
$translation = $node->getTranslation($langcode);
$translation->field_foo->value;
```
