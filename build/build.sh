#!/bin/sh
phing -f build/build.xml -Dprofile.code=$1 -Dsrcdir=$(pwd)