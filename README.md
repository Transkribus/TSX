# TSX
Transcriptorium Crowd Sourcing Platform

TSX is a web interface for transcription of digitised handwritten material "by the crowd". TSX was developed as part of the <a href="http://transcriptorium.eu/">tranScripotium project</a> and uses the <a href="https://transkribus.eu/Transkribus/">Transkribus</a> web servicces to manage transcripts and access digitised images and HTR tool outputs.

A demonstrator of the platform was implemented as part of the tranScriptorium project in conjunction with the "Transcribe Bentham" platform.

![Composite screen shots of TSX](/TSX_screen.png "TSX and Transcribe Bentham")

http://www.transcribe-bentham.da.ulcc.ac.uk/TSX/

###Pre-reququisites

apache2, php

### Installation

Clone this repository on to the docroot or sub-directory thereof on server.

```
git clone https://github.com/cziaarm/TSX.git
```

### Brief overview of code

Most of the functionailty and interaction with transkribus is handled client side. There are some php scripts that handle some very simple config, html templating and also a php proxy for some of the requests to the transkribus server to avoid X-domain issues.

js/tsx.js comtains all the tsx clientside functionailty with the help of the following libraries:

- jQuery
  - jQuery-ui
  - jQuery-cookie
  - jQuery-json2xml
  - jQuery-mousewheel
  - jQuery validate
  - Jquery-xslt
- jstree
- xml2json
- codemirror
  - show-hint
  - xml
  - merge
  - diff_match_patch
- bootstrap
  - bootstrap-dialog
- raphael
  - raphael-pan-zoom

