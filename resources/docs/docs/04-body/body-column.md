
# Body Column

### Overview
A body column is  a layout that is used to stack items vertically inside the body. This can be Text, Image or other components. The column can also be a stack of body rows and other body columns.

```php
Body\Layout\BodyColumn::make()
```
### Listing Items
To list items inside the column, use the `schema` method. The schema method accepts an array of components that will be listed vertically inside the column.

```php
use EightyNine\Reports\Components\Text;

Body\Layout\BodyColumn::make()
    ->schema([
        Text::make("Some title"),
        Text::make("Some subtitle"),
        Text::make("Some other text"),
]),
```

<img src="/img/body-column/vertical-listed-items.jpeg" alt="alt text" width="100%" class="screenshot"/>

### Aligning Items to the center
The column items can be aligned to the center by using the `alignCenter` method.

```php
use EightyNine\Reports\Components\Text;

Body\Layout\BodyColumn::make()
    ->alignCenter()
    ->schema([
        Text::make("Some title"),
        Text::make("Some subtitle"),
        Text::make("Some other text"),
]),
```

<img src="/img/body-column/align-center.jpeg" alt="alt text" width="100%" class="screenshot"/>

### Aligning Items to the right
The column items can be aligned to the right by using the `alignRight` method.

```php
use EightyNine\Reports\Components\Text;

Body\Layout\BodyColumn::make()
    ->alignRight()
    ->schema([
        Text::make("Some title"),
        Text::make("Some subtitle"),
        Text::make("Some other text"),
]),
```

<img src="/img/body-column/align-right.jpeg" alt="alt text" width="100%" class="screenshot"/>

### Stacking multiple columns horizontally
The [Body Row](/docs/body/body-row) component can be used to stack multiple columns horizontally. The row component accepts an array of columns that will be stacked horizontally.

```php
use EightyNine\Reports\Components\Text;

Body\Layout\BodyRow::make()
    ->schema([
        Body\Layout\BodyColumn::make()
            ->schema([
                Text::make("Some title"),
                Text::make("Some subtitle"),
                Text::make("Some other text"),
            ])->alignLeft(),
        Body\Layout\BodyColumn::make()
            ->schema([
                Text::make("Some title"),
                Text::make("Some subtitle"),
                Text::make("Some other text"),
            ])->alignRight(),

    ]),
```
<img src="/img/body-column/multiple-columns.jpeg" alt="alt text" width="100%" class="screenshot"/>
