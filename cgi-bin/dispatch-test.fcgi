#!/usr/local/bin/python2.6

import sys
import os

PROJECT_PATH = '/home/shackman/web/mycmsproject' 

sys.path.insert(0,'/home/shackman/env/lib/python2.6/site-packages')
sys.path.insert(0, PROJECT_PATH)

os.chdir(PROJECT_PATH)

os.environ['DJANGO_SETTINGS_MODULE'] = 'settings'

from django.core.servers.fastcgi import runfastcgi
runfastcgi(method="threaded", daemonize="false")
