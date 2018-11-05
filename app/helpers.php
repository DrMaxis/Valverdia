<?php

 function convertToUSD($price) {
        return number_format((float)$price, 2);
    }

    function setActiveCategory($category, $output = 'active') {
        return request()->category == $category ? $output : '';
    }