func rotate(nums []int, k int) {
	n := len(nums)
	k = k % n
	count := 0
	for start := 0; count < n; start++ {
		current, prev := start, nums[start]
		for {
			next := (current + k) % n
			nums[next], prev = prev, nums[next]
			current = next
			count++
			if start == current {
				break
			}
		}
	}
	fmt.Println(nums)
}