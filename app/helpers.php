<?php

 function convertToUSD($price) {
        return '$' . number_format($price, 2);
    }

    function setActiveCategory($category, $output = 'active') {
        return request()->category == $category ? $output : '';
    }