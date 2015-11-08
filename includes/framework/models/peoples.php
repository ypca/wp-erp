<?php
namespace WeDevs\ERP\Framework\Models;

use WeDevs\ERP\Framework\Model;

class People extends Model {
    protected $primaryKey = 'id';
    protected $table      = 'erp_peoples';
    public $timestamps    = false;
    protected $fillable   = [ 'user_id', 'first_name', 'last_name', 'company', 'email', 'phone', 'mobile',
            'other', 'website', 'fax', 'notes', 'street_1', 'city', 'state', 'postal_code', 'country',
            'currency', 'type', 'created' ];

    /**
     * Fetch people with types
     *
     * @param object $query
     * @param string $type
     *
     * @return object
     */
    public function scopeType( $query, $type = 'customer' ) {
        return $query->where( 'type', '=', $type );
    }
}
