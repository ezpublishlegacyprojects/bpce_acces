<?php /* #?ini charset="utf-8"?

[AuthSettings]
#Table associating IP net to Anonymous User ID
IP[]
IP[127.0.0.1-127.0.0.1]=14
IP[127.0.0.2-127.0.0.255]=10

AnonymousId[]
AnonymousId[]=10

#	Name of the HTTP variable to get the IP from the sent HTTP request
#	With Transparent proxy
#	RemoteAddrProxy=HTTP_X_FORWARDED_FOR
#	Without any proxy
RemoteAddrProxy=REMOTE_ADDR

Debug=disabled

*/ ?>