<?php
if($module == 'attach' and $method == 'upload')   return true;
if($module == 'attach' and $method == 'download') return true;
if($module == 'entry'  and $method == 'auth') return true;
