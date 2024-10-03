func rotate(nums []int, k int)  {
	n := len(nums)
	k = k % n
	copy(nums, append(nums[n-k:], nums[:n-k]...))
	fmt.Println(nums)
}