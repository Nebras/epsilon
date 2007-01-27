<?php
/*
 * This software implements a simplified DOM interface for PHP.
 * Copyright (C) 2004 Baron Schwartz <baron at xaprb dot com>
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License as published by the Free
 * Software Foundation, version 2.1.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more
 * details.
 * 
 * $Id: DocumentFragment.php,v 1.1 2007/01/27 16:09:57 dkolovos Exp $
 */

include_once("Node.php");

class DocumentFragment extends Node {

    function DocumentFragment() {
        $this->Node();
        $this->nodeType = DOM_DOCUMENT_FRAGMENT_NODE;
    }

}

?>