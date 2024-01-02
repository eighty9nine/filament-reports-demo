
# Header Row

### Overview
A header row is  a layout that is used to stack items horizontally inside the header. This can be Text, Image or other components. The column can also be a stack of header columns and other header columns.

```php
Header\Layout\HeaderRow::make()
```

### Listing Items
To list items inside the row, use the `schema` method. The schema method accepts an array of components that will be listed horizontally inside the column. In the example below we are listing 3 text components and a [Header Column](/docs/header/header-column).

```php

Header\Layout\HeaderRow::make()
    ->schema([
        Text::make("Item 1"),
        Text::make("Item 2"),
        Text::make("Item 3"),
        Header\Layout\HeaderColumn::make()
            ->schema([
                Text::make("Some title"),
                Text::make("Some subtitle"),
                Text::make("Some subtitle"),
            ])->alignRight(),
    ]),
```

<img src="/img/header-row/list-items.jpeg" alt="alt text" width="100%" class="screenshot"/>

### Aligning Items to the middle
The row items can be aligned to the middle by using the `alignMiddle` method.

```php
Header\Layout\HeaderRow::make()
    ->alignMiddle()
    ->schema([
        Text::make("Item 1"),
        Text::make("Item 2"),
        Text::make("Item 3"),
        Header\Layout\HeaderColumn::make()
            ->schema([
                Text::make("Some title"),
                Text::make("Some subtitle"),
                Text::make("Some subtitle"),
            ])->alignRight(),
    ]),
```

<img src="/img/header-row/align-middle.jpeg" alt="alt text" width="100%" class="screenshot"/>

### Aligning Items to the bottom
The row items can be aligned to the bottom by using the `alignBottom` method.

```php
Header\Layout\HeaderRow::make()
    ->alignBottom()
    ->schema([
        Text::make("Item 1"),
        Text::make("Item 2"),
        Text::make("Item 3"),
        Header\Layout\HeaderColumn::make()
            ->schema([
                Text::make("Some title"),
                Text::make("Some subtitle"),
                Text::make("Some subtitle"),
            ])->alignRight(),
    ]),
```

<img src="/img/header-row/align-bottom.jpeg" alt="alt text" width="100%" class="screenshot"/>
