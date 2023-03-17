@php
    $imap = imap_open("{imap.beget.com:993/imap/ssl}INBOX", "info@prospekt-parts.com", "aH{~K#s4%ti|RyKwB~Bm");
    $mails_id = imap_search($imap, 'ALL');    
@endphp

@extends('layout/main')
@section('title', 'Электронная почта')

@section('content')
<ol class="list-group list-group-numbered shadow-sm mt-4">
    <?php
        foreach ($mails_id as $num) {
            $header = imap_header($imap, $num); //
            $header = json_decode(json_encode($header), true);
            $subject = mb_decode_mimeheader($header['subject']); 
            //$body = imap_body($imap, $num);
            //$body = quoted_printable_decode($body);
            $body = imap_fetchstructure($imap, $num);
            $body = json_decode(json_encode($body), true);
    ?>
            
            
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="<?=($header['Unseen'] == "U") ? 'fw-bold' : '';?>"><?=mb_decode_mimeheader($header['subject'])?></div>
                    От: <a href="mailto:{{$header['from'][0]['mailbox']}}&#64;{{$header['from'][0]['host']}}">{{mb_decode_mimeheader($header['fromaddress'])}}</a> 
                    &#160;/&#160;
                    <small class="text-muted">{{$timer::datatime($header['date'])}}</small> 
                    <?php print_r($num);?>
                    <?php //print_r($body);?>
                </div>
                <?php if (mb_strpos($subject, 'заявка') !== false) { ?>
                <?php imap_setflag_full($imap, $num, '\\flagged'); ?>
                <span class="material-symbols-outlined text-danger">bookmarks</span>
                <?php } ?>
                @if (isset($body['parts'][0]))
                    <span class="material-symbols-outlined">attach_file</span>
                @endif
            </li>
    <?php } imap_close($imap); ?>
</ol>
<div>
    <?php
    $imap = imap_open("{imap.beget.com:993/imap/ssl}INBOX", "info@prospekt-parts.com", "aH{~K#s4%ti|RyKwB~Bm");
        $bodyhtml = imap_body($imap, 3);
        $bodyhtml = quoted_printable_decode($bodyhtml);  
        //$bodys = imap_fetchstructure($imap, 3, FT_UID);
        //$bodys = json_decode(json_encode($bodys), true);
        echo $bodyhtml;
        //print_r($bodys['subtype']);
        imap_close($imap); 
    ?>
</div>
@endsection