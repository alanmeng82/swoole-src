--TEST--
swoole_websocket_server: websocket push 3
--SKIPIF--
<?php require __DIR__ . '/../include/skipif.inc'; ?>
--FILE--
<?php
require_once __DIR__ . '/../include/bootstrap.php';
// swoole_websocket_server::pack(
//         sha1(openssl_random_pseudo_bytes(256)), );
// var_dump(
//     swoole_websocket_server::unpack(
//         swoole_websocket_server::pack('Hello swoole!', WEBSOCKET_OPCODE_TEXT, true)
//     )
// );
?>
--EXPECT--