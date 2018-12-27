<?php
namespace Pw\Midtrans\Contracts;

interface BaseFactory {
    public static function charge($data);
    public static function status($order_id);
    public static function approve($order_id);
    public static function cancel($order_id);
    public static function expire($order_id);
}