<?php

namespace View;

/**
 * Interface that should be implemented by any templating engine.
 */
interface View {
    /**
     * returns the fully rendered HTML code that should be sent to the client's
     * browser.
     */
    public function renderPage();
}
