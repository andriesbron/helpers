<?php

include_once 'chunked_transfer_helper.php';

$ct = new chunked_transfer_helper("text/html");
$ct->open_transfer();
$ct->send_chunk("<!doctype html><html><head><title>Transfer-Encoding: chunked</title><script>");
$ct->send_space_padding();
$ct->send_chunk("</script></head><body><div>");
for ($i=0; $i<5; $i++)
{
    $ct->send_chunk($i."<br>");
    sleep(1);
}
$ct->send_chunk("</div></body><html>"); // RN send by class
$ct->done();

exit;
