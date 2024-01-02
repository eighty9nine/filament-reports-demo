
# Header Column

### Overview
A header column is  a layout that is used to stack items vertically inside the header. This can be Text, Image or other components. The column can also be a stack of header rows and other header columns.

```php
Header\Layout\HeaderColumn::make()
```
### Listing Items
To list items inside the column, use the `schema` method. The schema method accepts an array of components that will be listed vertically inside the column.

```php
use EightyNine\Reports\Components\Text;

Header\Layout\HeaderColumn::make()
    ->schema([
        Text::make("Some title"),
        Text::make("Some subtitle"),
        Text::make("Some other text"),
]),
```

<img src="/img/header-column/vertical-listed-items.jpeg" alt="alt text" width="100%" class="screenshot"/>

### Aligning Items to the center
The column items can be aligned to the center by using the `alignCenter` method.

```php
use EightyNine\Reports\Components\Text;

Header\Layout\HeaderColumn::make()
    ->alignCenter()
    ->schema([
        Text::make("Some title"),
        Text::make("Some subtitle"),
        Text::make("Some other text"),
]),
```

<img src="/img/header-column/align-center.jpeg" alt="alt text" width="100%" class="screenshot"/>

### Aligning Items to the right
The column items can be aligned to the right by using the `alignRight` method.

```php
use EightyNine\Reports\Components\Text;

Header\Layout\HeaderColumn::make()
    ->alignRight()
    ->schema([
        Text::make("Some title"),
        Text::make("Some subtitle"),
        Text::make("Some other text"),
]),
```

<img src="/img/header-column/align-right.jpeg" alt="alt text" width="100%" class="screenshot"/>

### Stacking multiple columns horizontally
The [Header Row](/docs/header/header-row) component can be used to stack multiple columns horizontally. The row component accepts an array of columns that will be stacked horizontally.

```php
use EightyNine\Reports\Components\Text;

Header\Layout\HeaderRow::make()
    ->schema([
        Header\Layout\HeaderColumn::make()
            ->schema([
                Text::make("Some title"),
                Text::make("Some subtitle"),
                Text::make("Some other text"),
            ])->alignLeft(),
        Header\Layout\HeaderColumn::make()
            ->schema([
                Text::make("Some title"),
                Text::make("Some subtitle"),
                Text::make("Some other text"),
            ])->alignRight(),

    ]),
```
<img src="/img/header-column/multiple-columns.jpeg" alt="alt text" width="100%" class="screenshot"/>
