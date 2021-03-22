<ol class="breadcrumb float-sm-right">
    <?php
        $total = count($this->items);
        for ($i = 0; $i <= $total - 1; $i++) {
            $item = $this->items[$i];

            echo $i < $total - 1 ?
                '<li class="breadcrumb-item"><a href="'.$item['url'].'">'.$item['text'].'</a></li>' :
                '<li class="breadcrumb-item active">'.$item['text'].'</li>'
            ;
        }
    ?>
</ol>
