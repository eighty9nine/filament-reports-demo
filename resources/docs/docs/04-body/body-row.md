
# Body Row

### Overview
A body row is  a layout that is used to stack items horizontally inside the body. This can be Text, Image or other components. The column can also be a stack of body rows and other body columns.

```php
Body\Layout\BodyRow::make()
```

### Listing Items
To list items inside the row, use the `schema` method. The schema method accepts an array of components that will be listed horizontally inside the row. In the example below we are listing 3 text components and a [Body Column](/docs/body/body-column).

```php

Body\Layout\BodyRow::make()
    ->schema([
        Text::make("Item 1"),
        Text::make("Item 2"),
        Text::make("Item 3"),
        Body\Layout\BodyColumn::make()
            ->schema([
                Text::make("Some title"),
                Text::make("Some subtitle"),
                Text::make("Some subtitle"),
            ])->alignRight(),
    ]),
```

<img src="/img/body-row/list-items.jpeg" alt="alt text" width="100%" class="screenshot"/>

### Aligning Items to the middle
The row items can be aligned to the middle by using the `alignMiddle` method.

```php
Body\Layout\BodyRow::make()
    ->alignMiddle()
    ->schema([
        Text::make("Item 1"),
        Text::make("Item 2"),
        Text::make("Item 3"),
        Body\Layout\BodyColumn::make()
            ->schema([
                Text::make("Some title"),
                Text::make("Some subtitle"),
                Text::make("Some subtitle"),
            ])->alignRight(),
    ]),
```

<img src="/img/body-row/align-middle.jpeg" alt="alt text" width="100%" class="screenshot"/>

### Aligning Items to the bottom
The row items can be aligned to the bottom by using the `alignBottom` method.

```php
Body\Layout\BodyRow::make()
    ->alignBottom()
    ->schema([
        Text::make("Item 1"),
        Text::make("Item 2"),
        Text::make("Item 3"),
        Body\Layout\BodyColumn::make()
            ->schema([
                Text::make("Some title"),
                Text::make("Some subtitle"),
                Text::make("Some subtitle"),
            ])->alignRight(),
    ]),
```

<img src="/img/body-row/align-bottom.jpeg" alt="alt text" width="100%" class="screenshot"/>
