<a href="{{ route('users.followings', $user->id) }}">
  <strong id="following" class="stat">
    {{ $user->followings->count() }}
  </strong>
  关注
</a>
<a href="{{ route('users.followers', $user->id) }}">
  <strong id="followers" class="stat">
    {{ $user->followers->count() }}
  </strong>
  粉丝
</a>
<a href="{{ route('users.show', $user->id) }}">
  <strong id="statuses" class="stat">
    {{ $user->statuses()->count() }}
  </strong>
  微博
</a>
