<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------
  | MIME TYPES
  | -------------------------------------------------------------------
  | This file contains an array of mime types.  It is used by the
  | Upload class to help identify allowed file types.
  |
 */
return array(
    'hqx' => array('application/mac-binhex40', 'application/mac-binhex', 'application/x-binhex40', 'application/x-mac-binhex40'),
    'cpt' => array('application/mac-compactpro'),
    'csv' => array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain'),
    'bin' => array('application/macbinary', 'application/mac-binary', 'application/octet-stream', 'application/x-binary', 'application/x-macbinary'),
    'dms' => array('application/octet-stream'),
    'lha' => array('application/octet-stream'),
    'lzh' => array('application/octet-stream'),
    'exe' => array('application/octet-stream', 'application/x-msdownload'),
    'class' => array('application/octet-stream'),
    'psd' => array('application/x-photoshop', 'image/vnd.adobe.photoshop'),
    'so' => array('application/octet-stream'),
    'sea' => array('application/octet-stream'),
    'dll' => array('application/octet-stream'),
    'oda' => array('application/oda'),
    'pdf' => array('application/pdf', 'application/force-download', 'application/x-download', 'binary/octet-stream'),
    // 'ai' => array('application/pdf', 'application/postscript'),
    'eps' => array('application/postscript'),
    'ps' => array('application/postscript'),
    'smi' => array('application/smil'),
    'smil' => array('application/smil'),
    'mif' => array('application/vnd.mif'),
    'xls' => array('application/vnd.ms-excel', 'application/msexcel', 'application/x-msexcel', 'application/x-ms-excel', 'application/x-excel', 'application/x-dos_ms_excel', 'application/xls', 'application/x-xls', 'application/excel', 'application/download', 'application/vnd.ms-office', 'application/msword'),
    'ppt' => array('application/powerpoint', 'application/vnd.ms-powerpoint', 'application/vnd.ms-office', 'application/msword'),
    'pptx' => array('application/vnd.openxmlformats-officedocument.presentationml.presentation'),
    'wbxml' => array('application/wbxml'),
    'wmlc' => array('application/wmlc'),
    'dcr' => array('application/x-director'),
    'dir' => array('application/x-director'),
    'dxr' => array('application/x-director'),
    'dvi' => array('application/x-dvi'),
    'gtar' => array('application/x-gtar'),
    'gz' => array('application/x-gzip'),
    'gzip' => array('application/x-gzip'),
    'php' => array('application/x-httpd-php', 'application/php', 'application/x-php', 'text/php', 'text/x-php', 'application/x-httpd-php-source'),
    'php4' => array('application/x-httpd-php'),
    'php3' => array('application/x-httpd-php'),
    'phtml' => array('application/x-httpd-php'),
    'phps' => array('application/x-httpd-php-source'),
    'js' => array('application/x-javascript', 'text/plain'),
    'swf' => array('application/x-shockwave-flash'),
    'sit' => array('application/x-stuffit'),
    'tar' => array('application/x-tar'),
    'tgz' => array('application/x-tar', 'application/x-gzip-compressed'),
    'z' => array('application/x-compress'),
    'xhtml' => array('application/xhtml+xml'),
    'xht' => array('application/xhtml+xml'),
    'zip' => array('application/x-zip', 'application/zip', 'application/x-zip-compressed', 'application/s-compressed', 'multipart/x-zip'),
    'rar' => array('application/x-rar', 'application/rar', 'application/x-rar-compressed'),
    'mid' => array('audio/midi'),
    'midi' => array('audio/midi'),
    'mpga' => array('audio/mpeg'),
    'mp2' => array('audio/mpeg'),
    'mp3' => array('audio/mpeg', 'audio/mpg', 'audio/mpeg3', 'audio/mp3'),
    'aif' => array('audio/x-aiff', 'audio/aiff'),
    'aiff' => array('audio/x-aiff', 'audio/aiff'),
    'aifc' => array('audio/x-aiff'),
    'ram' => array('audio/x-pn-realaudio'),
    'rm' => array('audio/x-pn-realaudio'),
    'rpm' => array('audio/x-pn-realaudio-plugin'),
    'ra' => array('audio/x-realaudio'),
    'rv' => array('video/vnd.rn-realvideo'),
    'wav' => array('audio/x-wav', 'audio/wave', 'audio/wav'),
    'bmp' => array('image/bmp', 'image/x-bmp', 'image/x-bitmap', 'image/x-xbitmap', 'image/x-win-bitmap', 'image/x-windows-bmp', 'image/ms-bmp', 'image/x-ms-bmp', 'application/bmp', 'application/x-bmp', 'application/x-win-bitmap'),
    'gif' => array('image/gif'),
    'jpeg' => array('image/jpeg', 'image/pjpeg'),
    'jpg' => array('image/jpeg', 'image/pjpeg'),
    'jpe' => array('image/jpeg', 'image/pjpeg'),
    'jp2' => array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
    'j2k' => array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
    'jpf' => array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
    'jpg2' => array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
    'jpx' => array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
    'jpm' => array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
    'mj2' => array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
    'mjp2' => array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
    'png' => array('image/png', 'image/x-png'),
    'tiff' => array('image/tiff'),
    'tif' => array('image/tiff'),
    'css' => array('text/css', 'text/plain'),
    'html' => array('text/html', 'text/plain'),
    'htm' => array('text/html', 'text/plain'),
    'shtml' => array('text/html', 'text/plain'),
    'txt' => array('text/plain'),
    'text' => array('text/plain'),
    'log' => array('text/plain', 'text/x-log'),
    'rtx' => array('text/richtext'),
    'rtf' => array('text/rtf'),
    'xml' => array('application/xml', 'text/xml', 'text/plain'),
    'xsl' => array('application/xml', 'text/xsl', 'text/xml'),
    'mpeg' => array('video/mpeg'),
    'mpg' => array('video/mpeg'),
    'mpe' => array('video/mpeg'),
    'qt' => array('video/quicktime'),
    'mov' => array('video/quicktime'),
    'avi' => array('video/x-msvideo', 'video/msvideo', 'video/avi', 'application/x-troff-msvideo'),
    'movie' => array('video/x-sgi-movie'),
    'doc' => array('application/msword', 'application/vnd.ms-office'),
    'docx' => array('application/vnd.openxmlformats-officedocument.wordprocessingml.document',  'application/msword'),
    'dot' => array('application/msword', 'application/vnd.ms-office'),
    'dotx' => array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/msword'),
    'xlsx' => array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet','application/vnd.ms-excel'),
    'word' => array('application/msword', 'application/octet-stream'),
    'xl' => array('application/excel'),
    'eml' => array('message/rfc822'),
    'json' => array('application/json', 'text/json'),
    'pem' => array('application/x-x509-user-cert', 'application/x-pem-file', 'application/octet-stream'),
    'p10' => array('application/x-pkcs10', 'application/pkcs10'),
    'p12' => array('application/x-pkcs12'),
    'p7a' => array('application/x-pkcs7-signature'),
    'p7c' => array('application/pkcs7-mime', 'application/x-pkcs7-mime'),
    'p7m' => array('application/pkcs7-mime', 'application/x-pkcs7-mime'),
    'p7r' => array('application/x-pkcs7-certreqresp'),
    'p7s' => array('application/pkcs7-signature'),
    'crt' => array('application/x-x509-ca-cert', 'application/x-x509-user-cert', 'application/pkix-cert'),
    'crl' => array('application/pkix-crl', 'application/pkcs-crl'),
    'der' => array('application/x-x509-ca-cert'),
    'kdb' => array('application/octet-stream'),
    'pgp' => array('application/pgp'),
    'gpg' => array('application/gpg-keys'),
    'sst' => array('application/octet-stream'),
    'csr' => array('application/octet-stream'),
    'rsa' => array('application/x-pkcs7'),
    'cer' => array('application/pkix-cert', 'application/x-x509-ca-cert'),
    '3g2' => array('video/3gpp2'),
    '3gp' => array('video/3gp', 'video/3gpp'),
    'mp4' => array('video/mp4'),
    'm4a' => array('audio/x-m4a'),
    'f4v' => array('video/mp4', 'video/x-f4v'),
    'flv' => array('video/x-flv'),
    'webm' => array('video/webm'),
    'aac' => array('audio/x-acc'),
    'm4u' => array('application/vnd.mpegurl'),
    'm3u' => array('text/plain'),
    'xspf' => array('application/xspf+xml'),
    'vlc' => array('application/videolan'),
    'wmv' => array('video/x-ms-wmv', 'video/x-ms-asf'),
    'au' => array('audio/x-au'),
    'ac3' => array('audio/ac3'),
    'flac' => array('audio/x-flac'),
    'ogg' => array('audio/ogg', 'video/ogg', 'application/ogg'),
    'kmz' => array('application/vnd.google-earth.kmz'),
    'kml' => array('application/vnd.google-earth.kml+xml', 'application/xml', 'text/xml'),
    'ics' => array('text/calendar'),
    'ical' => array('text/calendar'),
    'zsh' => array('text/x-scriptzsh'),
    '7zip' => array('application/x-compressed', 'application/x-zip-compressed'),
    'cdr' => array('application/cdr', 'application/coreldraw', 'application/x-cdr', 'application/x-coreldraw', 'image/cdr', 'image/x-cdr', 'zz-application/zz-winassoc-cdr'),
    'wma' => array('audio/x-ms-wma', 'video/x-ms-asf'),
    'jar' => array('application/java-archive', 'application/x-java-application', 'application/x-jar', 'application/x-compressed'),
    'svg' => array('image/svg+xml', 'application/xml', 'text/xml'),
    'vcf' => array('text/x-vcard'),
    'srt' => array('text/srt', 'text/plain'),
    'vtt' => array('text/vtt', 'text/plain'),
    'ico' => array('image/x-icon', 'image/x-ico', 'image/vnd.microsoft.icon')
);
