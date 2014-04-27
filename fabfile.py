from fabric.api import *
import os
import fabric.contrib.project as project

PROD = 'shackman@shackmanpress.com'
KEY = '/homes/sjacoby/.ssh/id_bardamu'


DEST_PATH = '/home/shackman/public_html/'
ROOT_PATH = os.path.abspath(os.path.dirname(__file__))
DEPLOY_PATH = ROOT_PATH 

RSYNC_EXCL = [".git", "*.py*"]

@hosts(PROD)
def publish():
    local('git push')
    project.rsync_project(
        remote_dir=DEST_PATH,
        local_dir=DEPLOY_PATH.rstrip('/') + '/',
        exclude= RSYNC_EXCL,
        delete=False
    )
