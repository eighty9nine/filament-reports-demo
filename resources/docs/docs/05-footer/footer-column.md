
# Footer Column

### Overview
A footer column is  a layout that is used to stack items vertically inside the footer. This can be Text, Image or other components. The column can also be a stack of footer rows and other footer columns.

```php
Footer\Layout\FooterColumn::make()
```
### Listing Items
To list items inside the column, use the `schema` method. The schema method accepts an array of components that will be listed vertically inside the column.

```php
use EightyNine\Reports\Components\Text;

Footer\Layout\FooterColumn::make()
    ->schema([
        Text::make("Some title"),
        Text::make("Some subtitle"),
        Text::make("Some other text"),
]),
```

<img src="/img/footer-column/vertical-listed-items.jpeg" alt="alt text" width="100%" class="screenshot"/>

### Aligning Items to the center
The column items can be aligned to the center by using the `alignCenter` method.

```php
use EightyNine\Reports\Components\Text;

Footer\Layout\FooterColumn::make()
    ->alignCenter()
    ->schema([
        Text::make("Some title"),
        Text::make("Some subtitle"),
        Text::make("Some other text"),
]),
```

<img src="/img/footer-column/align-center.jpeg" alt="alt text" width="100%" class="screenshot"/>

### Aligning Items to the right
The column items can be aligned to the right by using the `alignRight` method.

```php
use EightyNine\Reports\Components\Text;

Footer\Layout\FooterColumn::make()
    ->alignRight()
    ->schema([
        Text::make("Some title"),
        Text::make("Some subtitle"),
        Text::make("Some other text"),
]),
```

<img src="/img/footer-column/align-right.jpeg" alt="alt text" width="100%" class="screenshot"/>

### Stacking multiple columns horizontally
The [Footer Row](/docs/footer/footer-row) component can be used to stack multiple columns horizontally. The row component accepts an array of columns that will be stacked horizontally.

```php
use EightyNine\Reports\Components\Text;

Footer\Layout\FooterRow::make()
    ->schema([
        Footer\Layout\FooterColumn::make()
            ->schema([
                Text::make("Some title"),
                Text::make("Some subtitle"),
                Text::make("Some other text"),
            ])->alignLeft(),
        Footer\Layout\FooterColumn::make()
            ->schema([
                Text::make("Some title"),
                Text::make("Some subtitle"),
                Text::make("Some other text"),
            ])->alignRight(),

    ]),
```
<img src="/img/footer-column/multiple-columns.jpeg" alt="alt text" width="100%" class="screenshot"/>
