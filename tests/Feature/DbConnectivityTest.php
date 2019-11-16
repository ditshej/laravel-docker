<?php
/**
 * Tests\Feature\DbConnectivityTest.php
 *
 * @description Description.
 *
 * @author rw
 * @since 16.11.2019
 *
 * Updates:
 * @update
 */

namespace Tests\Feature;

use Tests\TestCase;

class DbConnectivityTest extends TestCase {

    public function testDbConnectivity() {
        /** @var Connection $db */
        $db = $this->app->make("db");
        $row = $db->selectOne("SELECT 1 AS one");
        $this->assertEquals(1, $row->one);
    }
}
