<x-profile :sharedData="$sharedData" doctitle="{{ $sharedData['username'] }}'s profile">
    @include('profile-posts-only')
</x-profile>
