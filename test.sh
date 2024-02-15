#!/bin/bash -l

TIME=`date +%s`

varnishadm vcl.load custom_$TIME /home/bas/varnish.vcl
varnishadm vcl.use custom_$TIME
varnishadm 'ban req.url ~ "^/"'
