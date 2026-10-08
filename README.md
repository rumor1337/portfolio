#### portfolio website

Commit syncing is available through `php artisan commits:sync` and is scheduled every
15 minutes. Run the sync once during deployment/server startup, then add Laravel's
scheduler to cron:

```cron
* * * * * cd /path/to/portfolio && php artisan schedule:run >> /dev/null 2>&1
```