<?php

namespace App\ModelFilters;

use Illuminate\Database\Eloquent\Builder;

trait BizsFilter
{
    public function name(Builder $builder, $value): Builder
    {
        return $builder->where('name', 'like', '%'.$value.'%');
    }

    public function min_actual_sale_price(Builder $builder, $value): Builder
    {
        return $builder->where('actual_sale_price', '>=', $value );

    }

    public function max_actual_sale_price(Builder $builder, $value): Builder
    {
        return $builder->where('actual_sale_price', '<=', $value );
    }

    public function min_wish_sale_price(Builder $builder, $value): Builder
    {
        return $builder->where('actual_sale_price', '>=', $value );

    }

    public function max_wish_sale_price(Builder $builder, $value): Builder
    {
        return $builder->where('actual_sale_price', '<=', $value );
    }

    public function popular(Builder $builder, $value): Builder
    {
        return $builder->where('name', 'like', '%'.$value.'%');
    }
}
