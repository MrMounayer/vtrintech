<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
       

        $panelId = $panel->getId();
        
        if ($panelId === 'super-admin') {
            // ONLY super_admin role can access
            return $this->role === 'super_admin';
        }
        
        if ($panelId === 'admin') {
            // admin AND super_admin can access
            return in_array($this->role, ['admin', 'super_admin']);
        }
        
        // Default: no access
        return true;
    }

    public function vitrines()
    {
        return $this->hasMany(Vitrine::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
