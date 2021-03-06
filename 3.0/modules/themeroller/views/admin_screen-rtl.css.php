/**
 * Gallery 3 Admin Right yo left language styles
 */

.rtl {
  direction: rtl;
}

 #g-header,
 #g-content,
 #g-sidebar,
 #g-footer,
 caption,
 th,
 #g-dialog,
 .g-context-menu li a,
 .g-message-box li,
 #g-site-status li {
  text-align: right;
}

 .g-text-right {
  text-align: left;
}

 .g-error,
 .g-info,
 .g-success,
 .g-warning,
 #g-add-photos-status .g-success,
 #g-add-photos-status .g-error {
  background-position: center right;
  padding-right: 30px !important;
}

 form li.g-error,
 form li.g-info,
 form li.g-success,
 form li.g-warning {
  padding-right: 0 !important;
}

 .g-left,
 .g-inline li,
 #g-content #g-album-grid .g-item,
 .sf-menu li,
 .g-breadcrumbs li,
 .g-paginator li,
 .g-buttonset li,
 .ui-icon-left .ui-icon,
 .g-short-form li,
 form ul ul li,
 input[type="submit"],
 input[type="reset"],
 input.checkbox,
 input[type=checkbox],
 input.radio,
 input[type=radio] {
  float: right;
}

 .g-right,
 .ui-icon-right .ui-icon {
  float: left;
}

 .g-inline li {
  margin-right: 1em;
}

 .g-inline li.g-first {
  margin-right: 0;
}

 .g-breadcrumbs li {
  background: transparent url('../images/ico-separator-rtl.png') no-repeat scroll right center;
  padding: 1em 18px 1em 8px;
}

 .g-breadcrumbs .g-first {
  background: none;
  padding-right: 0;
}

 input.checkbox {
  margin-left: .4em;
}

 #g-add-comment {
  right: inherit;
  left: 0;
}

 .ui-icon-left .ui-icon {
  margin-left: .2em;
}

 .ui-icon-right .ui-icon {
  margin-right: .2em;
}

/* RTL Corner radius ~~~~~~~~~~~~~~~~~~~~~~ */
 .g-buttonset .ui-corner-tl {
	-moz-border-radius-topleft: 0;
	-webkit-border-top-left-radius: 0;
	border-top-left-radius: 0;
	-moz-border-radius-topright: 5px !important;
	-webkit-border-top-right-radius: 5px !important;
	border-top-right-radius: 5px !important;
}

 .g-buttonset .ui-corner-tr {
	-moz-border-radius-topright: 0;
	-webkit-border-top-right-radius: 0;
	border-top-right-radius: 0;
	-moz-border-radius-topleft: 5px !important;
	-webkit-border-top-left-radius: 5px !important;
	border-top-left-radius: 5px !important;
}

 .g-buttonset .ui-corner-bl {
	-moz-border-radius-bottomleft: 0;
	-webkit-border-bottom-left-radius: 0;
	border-bottom-left-radius: 0;
	-moz-border-radius-bottomright: 5px !important;
	-webkit-border-bottom-right-radius: 5px !important;
	border-bottom-right-radius: 5px !important;
}

 .g-buttonset .ui-corner-br {
	-moz-border-radius-bottomright: 0;
	-webkit-border-bottom-right-radius: 0;
	border-bottom-right-radius: 0;
	-moz-border-radius-bottomleft: 5px !important;
	-webkit-border-bottom-left-radius: 5px !important;
	border-bottom-left-radius: 5px !important;
}

 .g-buttonset .ui-corner-right,
 .ui-progressbar .ui-corner-right {
	-moz-border-radius-topright: 0;
	-webkit-border-top-right-radius: 0;
	border-top-right-radius: 0;
	-moz-border-radius-topleft: 5px !important;
	-webkit-border-top-left-radius: 5px !important;
	border-top-left-radius: 5px !important;
	-moz-border-radius-bottomright: 0;
	-webkit-border-bottom-right-radius: 0;
	border-bottom-right-radius: 0;
	-moz-border-radius-bottomleft: 5px !important;
	-webkit-border-bottom-left-radius: 5px !important;
	border-bottom-left-radius: 5px !important;
}

 .g-buttonset .ui-corner-left,
 .ui-progressbar .ui-corner-left {
	-moz-border-radius-topleft: 0;
	-webkit-border-top-left-radius: 0;
	border-top-left-radius: 0;
	-moz-border-radius-topright: 5px !important;
	-webkit-border-top-right-radius: 5px !important;
	border-top-right-radius: 5px !important;
	-moz-border-radius-bottomleft: 0;
	-webkit-border-bottom-left-radius: 0;
	border-bottom-left-radius: 0;
	-moz-border-radius-bottomright: 5px !important;
	-webkit-border-bottom-right-radius: 5px !important;
	border-bottom-right-radius: 5px !important;
}

/* RTL Superfish ~~~~~~~~~~~~~~~~~~~~~~~~~ */

 .sf-menu a {
  border-left: none;
  border-right:1px solid #<?= $borderColorContent ?>;
}

 .sf-menu a.sf-with-ul {
  padding-left: 2.25em;
  padding-right: 1em;
}

 .sf-sub-indicator {
  background: url("themeroller/images/ui-icons_<?= $fcDefault ?>_256x240.png") no-repeat -96px -16px; /* 8-bit indexed alpha png. IE6 gets solid image only */
  left: .75em !important;
  right: auto;
}

 a > .sf-sub-indicator {  /* give all except IE6 the correct values */
  top: .8em;
  background-position: -10px -100px; /* use translucent arrow for modern browsers*/
}
/* apply hovers to modern browsers */
 a:focus > .sf-sub-indicator,
 a:hover > .sf-sub-indicator,
 a:active > .sf-sub-indicator,
 li:hover > a > .sf-sub-indicator,
 li.sfHover > a > .sf-sub-indicator {
  background-position: 0 -100px; /* arrow hovers for modern browsers*/
}

/* point right for anchors in subs */
 .sf-menu ul .sf-sub-indicator { background-position:  0 0; }
 .sf-menu ul a > .sf-sub-indicator { background-position:  -10px 0; }
/* apply hovers to modern browsers */
 .sf-menu ul a:focus > .sf-sub-indicator,
 .sf-menu ul a:hover > .sf-sub-indicator,
 .sf-menu ul a:active > .sf-sub-indicator,
 .sf-menu ul li:hover > a > .sf-sub-indicator,
 .sf-menu ul li.sfHover > a > .sf-sub-indicator {
  background-position: 0 0; /* arrow hovers for modern browsers*/
}

 .sf-menu li:hover ul,
 .sf-menu li.sfHover ul {
  right: 0;
  left: auto;
}

 ul.sf-menu li li:hover ul,
 ul.sf-menu li li.sfHover ul {
  right: 12em; /* match ul width */
  left: auto;
}
 ul.sf-menu li li li:hover ul,
 ul.sf-menu li li li.sfHover ul {
  right: 12em; /* match ul width */
  left: auto;
}

/*** shadows for all but IE6 ***/
 .sf-shadow ul {
  background: url('../images/superfish-shadow.png') no-repeat bottom left;
  border-top-right-radius: 0;
  border-bottom-left-radius: 0;
  -moz-border-radius-topright: 0;
  -moz-border-radius-bottomleft: 0;
  -webkit-border-top-right-radius: 0;
  -webkit-border-bottom-left-radius: 0;
  -moz-border-radius-topleft: 17px;
  -moz-border-radius-bottomright: 17px;
  -webkit-border-top-left-radius: 17px;
  -webkit-border-bottom-right-radius: 17px;
  border-top-left-radius: 17px;
  border-bottom-right-radius: 17px;
}

/* RTL ThemeRoller ~~~~~~~~~~~~~~~~~~~~~~~~ */

 .ui-dialog .ui-dialog-titlebar {
  padding: 0.5em 1em 0.3em 0.3em;
}

 .ui-dialog .ui-dialog-title {
  float: right;
}

 .ui-dialog .ui-dialog-titlebar-close {
  left: 0.3em;
  right: auto;
}

 #g-content #g-album-grid .g-item,
 #g-site-theme,
 #g-admin-theme,
 .g-selected img,
 .g-available .g-block img,
 #g-content #g-photo-stream .g-item,
 li.g-group,
 #g-server-add-admin {
  float: right;
}

 #g-admin-graphics .g-available .g-block {
  float: right;
  margin-left: 1em;
  margin-right: 0em;
}

 #g-site-admin-menu {
  left: auto;
  right: 150px;
}

 #g-header #g-login-menu {
  float: left;
}

 #g-header #g-login-menu li {
  margin-left: 0;
  padding-left: 0;
  padding-right: 1.2em;
}

 .g-selected img,
 .g-available .g-block img {
  margin: 0 0 1em 1em;
}

