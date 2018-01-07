## Common issues which i have encountered while learning

- AppServiceProvider mysql data size error
- [FiX]:
<p>
App/Providers/AppServiceProvider <br />

use Illuminate\Support\Facades\Schema;

public function boot()
{
  // this one need to be added
  Schema::defaultStringLength(191);
}
</p>
